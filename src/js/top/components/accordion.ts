const accordion = () => {

  const faqs = document.querySelectorAll('.js-faq') as NodeListOf<HTMLDivElement>;

  faqs.forEach(function (faq) {
    faq.addEventListener('click', function () {
      faq.classList.toggle('is-active');

      const answer = faq.querySelector('.js-answer') as HTMLDivElement;

      if (faq.classList.contains('is-active')) {
        const answerHeight = answer.scrollHeight; // calculate the height of the answer element
        answer.style.maxHeight = answerHeight + 'px'; // set the calculated height as max-height
      } else {
        answer.style.maxHeight = '0'; // set max-height to 0 when closing the accordion
      }
    });
  });

  document.addEventListener('click', (event) => { //remove is-active class from all FAQ box when clicked outside faq box
    const clickedElement = event.target as HTMLElement;
    if (!clickedElement.closest('.js-faq')) {
     faqs.forEach((faq) => {
      faq.classList.remove('is-active');
      const answer = faq.querySelector('.js-answer') as HTMLDivElement;
      answer.style.maxHeight = '0';
    });
    }
  });
}
  
export default accordion