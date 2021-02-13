(toggleNavbar = () => 
{
	const navbarBars = document.querySelector('.navbar-bars')
	const navbarList = document.querySelector('.navbar-list')

	const toggleNav = () =>

	{
		navbarList.classList.toggle('toggleNavbar')
	}

	navbarBars.addEventListener('click', toggleNav)
})()