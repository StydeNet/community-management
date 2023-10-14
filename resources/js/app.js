import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Common behaviour

const menu = document.getElementById('menu');
const menuBtn = document.getElementById('menu_btn');
menuBtn.addEventListener('click', (e) => {
	e.preventDefault();
	menu.classList.toggle('menu-open');
});

const userMenu = document.getElementById('user_menu');
const userMenuBtn = document.getElementById('user_menu_btn');
userMenuBtn.addEventListener('click', (e) => {
	e.preventDefault();
	userMenu.classList.toggle('user-menu-open');
});


// Tabs
const tabLinks = document.querySelectorAll('.tab-button');
const tabPanels = document.querySelectorAll('.tab-panel');

if (tabLinks.length) {
	function handleTabClick(event) {
		tabPanels.forEach(tabPanel => tabPanel.classList.remove('tab-panel-active'));
		tabLinks.forEach(tabLink => tabLink.classList.remove('tab-button-active'));
		const clickedTab = document.querySelector(`#${event.target.getAttribute('aria-controls')}`);
		clickedTab.classList.add('tab-panel-active');
		event.target.classList.add('tab-button-active');
	}
	
	tabLinks.forEach(tabLink => tabLink.addEventListener('click', handleTabClick));
}

// Repeatable fields
const repeatableFields = document.querySelectorAll('.field-repeatable');