const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    const toggle = header.querySelector('.accordion-toggle');

    header.addEventListener('click', () => {
        // Toggle the active class on the clicked item
        item.classList.toggle('active');

        // Toggle the plus and minus icon
        toggle.textContent = item.classList.contains('active') ? '-' : '+';

        // Close other open accordion items
        accordionItems.forEach(otherItem => {
            if (otherItem !== item) {
                otherItem.classList.remove('active');
                otherItem.querySelector('.accordion-toggle').textContent = '+';
            }
        });
    });
});



// inclusion - exclusion 
const inclusion  = document.getElementById('inclusion');
const exclusion  = document.getElementById('exclusion');
const inclusionTab = document.querySelector('.inclusion');
const exclusionTab = document.querySelector('.exclusion');

inclusion.addEventListener('click', () => {
    inclusion.classList.add('active-tab');
    exclusion.classList.remove('active-tab');
    inclusionTab.style.display = 'block';
    exclusionTab.style.display = 'none';

})
exclusion.addEventListener('click', ()=>{
    exclusion.classList.add('active-tab');
    inclusion.classList.remove('active-tab');
    exclusionTab.style.display = 'block';
    inclusionTab.style.display = 'none';
})



// popup 
function openPop() {

    const popUp =  document.getElementById("popUp");
    popUp.style.display = "flex";
    popUp.style.overflowY = "scroll";
  
    document.body.style.overflow = 'hidden';
  }
  function popUp() {
    document.getElementById("popUp").style.display = "none";
    document.body.style.overflow = 'auto';
  }
  function resMenu() {
   document.getElementById("menu").classList.toggle("res-menu");
  
  }
  
  