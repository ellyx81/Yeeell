const videoPlayer = () => {
  const sections = document.querySelectorAll('.js-section');
  const html = document.querySelector('.js-html') as HTMLElement;
  const videoOverlay = document.querySelector('.js-modal') as HTMLElement;
  const vidFrame = videoOverlay.querySelector('.js-iframe') as HTMLIFrameElement;

  const openVideo = (urlContent: string) => {
    videoOverlay.style.visibility = 'visible';
    html.style.overflowY = 'hidden';
    html.style.pointerEvents = 'none';
    videoOverlay.style.pointerEvents = 'auto';
    vidFrame.src = urlContent;
  };

  const closeVideo = () => {
    videoOverlay.style.visibility = 'hidden';
    html.style.overflowY = 'auto';
    html.style.pointerEvents = 'auto';
    vidFrame.src = '';
  };

  const handleClickOutside = (event : MouseEvent) => {
    const target = event.target as HTMLElement;
    sections.forEach((section) => {
      if (!section.contains(target)) {
        const openedVideoItem = section.querySelector('.js-video-item.is-opened');
        if (openedVideoItem) {
          openedVideoItem.classList.remove('is-opened');
          closeVideo();
        }
      }
    });
  };

  sections.forEach((section) => {
    const videos = section.querySelectorAll('.js-video-item');

    videos.forEach((videoItem) => {
      videoItem.addEventListener('click', () => {
        videoItem.classList.add('is-opened');
        const urlContent = (videoItem.querySelector('.js-url') as HTMLElement).textContent as string;

        if (videoItem.classList.contains('is-opened')) {
          openVideo(urlContent);
        } else {
          closeVideo();
        }
      });
    });
  });

  document.addEventListener('click', handleClickOutside);
};


export default videoPlayer;
