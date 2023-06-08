const videoPlayer = () => {
  const body = document.querySelector('.js-body') as HTMLElement;
  const parent = document.querySelector(".js-video");
  
  const handleClickOutside = (event: MouseEvent) => {
    const target = event.target as HTMLElement;
    if (parent && !parent.contains(target)) {
      const videos = parent.querySelectorAll(".js-video-item");
      videos.forEach((video) => {
        video.classList.remove("is-opened");
      });

      body.style.overflowY = 'auto'; // enable the vertical scrollbar when the video is closed
      body.style.pointerEvents = 'auto'; // enable all link/buttons outside the video modal
			
    }
  };

  if (parent) {
    const videos = parent.querySelectorAll(".js-video-item");
    videos.forEach((video) => {
      const videoOverlay = video.nextElementSibling as HTMLElement;
			const vidFrame = videoOverlay.querySelector('.js-video-frame') as HTMLElement;
      const originalSrc = vidFrame.getAttribute('src') as string;

      video.addEventListener("click", () => { // open the video
        video.classList.add("is-opened");
				console.log("video opened")
        body.style.overflowY = 'hidden'; // disable the vertical scrollbar when the video is opened
        body.style.pointerEvents = 'none'; // disable all link/buttons outside the video modal
        videoOverlay.style.pointerEvents = 'auto'; // exempt the video overlay from disabling
      });

      document.addEventListener("click", handleClickOutside);
    });
  }
};

export default videoPlayer;
