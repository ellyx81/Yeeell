const categoryTabs = () => {
  const categoryList = document.querySelectorAll('.js-category');
  const newsContainerList = document.querySelectorAll('.js-news');

  categoryList.forEach((category) => {
    category.addEventListener('click', () => {
      const target = category.getAttribute('data-target') as string;
      
      categoryList.forEach((category) => {
        category.classList.remove('is-active');
      });
      
      category.classList.add('is-active');
      
      newsContainerList.forEach((container) => {
        container.classList.remove('active');
      });

      const targetCategory = document.getElementById(target);
      if (targetCategory) {
        targetCategory.classList.add('active');
      }
    });
  });
};

export default categoryTabs;
