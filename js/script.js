document.addEventListener('DOMContentLoaded', function () {
    const posters = document.querySelectorAll('.movie-poster');
    const trailerModal = new bootstrap.Modal(document.getElementById('trailerModal'));
    const trailerVideo = document.getElementById('trailerVideo'); // Video element
    let playbackTimeout; // To store the timeout reference for stopping playback

    posters.forEach(poster => {
        poster.addEventListener('click', () => {
            const trailerSrc = poster.getAttribute('data-trailer'); // Get the trailer source URL

            // Set the video source and load the trailer
            trailerVideo.src = trailerSrc;
            trailerVideo.load(); // Load the video source
            trailerVideo.play(); // Play the video

            // Show the modal
            trailerModal.show();

            // Generate random playback duration between 30s and 60s
            const randomDuration = Math.floor(Math.random() * (60 - 30 + 1)) + 30;

            // Stop video playback after random duration
            playbackTimeout = setTimeout(() => {
                trailerVideo.pause(); // Pause the video
                trailerVideo.currentTime = 0; // Reset video to the beginning
            }, randomDuration * 1000); // Convert to milliseconds
        });
    });

    // Clear the video and timeout when the modal is closed
    trailerModal._element.addEventListener('hidden.bs.modal', () => {
        trailerVideo.pause(); // Pause the video
        trailerVideo.currentTime = 0; // Reset video to the beginning
        clearTimeout(playbackTimeout); // Clear any active timeout
    });
});
