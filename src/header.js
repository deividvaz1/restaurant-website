var header = document.getElementById('header');
var navigation_header = document.getElementById('navigation_header');
var swiper = document.getElementById('swiper');
var showSidebar = false;

function toggleSidebar ()
{
    showSidebar = !showSidebar;
    console.log(showSidebar);
    if(showSidebar)
    {
        //true
        navigation_header.style.marginLeft = '-10vw';
        navigation_header.style.animationName = 'showSidebar';

    }
    else
    {
        //false
        navigation_header.style.marginLeft = '-100vw';
        navigation_header.style.animationName = '';

    }
}

function closeSidebar()
{
    if(showSidebar)
    {
        toggleSidebar();
    }
}

window.addEventListener('resize', function(event) {
    console.log('responsividade')
    if(window.innerWidth > 768 && showSidebar)
    {
        toggleSidebar();
    }
});