let tabs = document.querySelectorAll('.tabs__toggle'),contents=document.querySelectorAll('.tabs__content');
tabs.forEach((tab, index)=>{
    tab.addEventListener('mouseover',()=>{
        contents.forEach((content)=>{
            content.classList.remove('is-active');
        });
        tabs.forEach((tab)=>{
            tab.classList.remove('is-active');
        });
        contents[index].classList.add('is-active');
        tabs[index].classList.add('is-active');

        

        
               });
    
});