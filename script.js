
document.addEventListener("DOMContentLoaded", function() {
    const toggleSidebarButton = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    
    toggleSidebarButton.addEventListener("click", function() {
        sidebar.classList.toggle("hidden");
    });
});

const projectTable = document.getElementById('projectTable');
const memberTable = document.getElementById('memberTable');
const scrumMasterTable = document.getElementById('scrumMasterTable');
const projectButton = document.getElementById('projectButton');
const dashboardButton = document.getElementById('dashboardButton');
const membersButton = document.getElementById('membersButton');
const scrumMasterButton = document.getElementById('scrumMasterButton');
const helpButton = document.getElementById('helpButton');
const logInButton = document.getElementById('logInButton');
const FAQ = document.getElementById("FAQ");
const dashboardpage = document.getElementById("dashboardpage");



projectButton.addEventListener('click', () => {
    projectTable.classList.remove('hidden');
})
dashboardButton.addEventListener('click', () => {
    projectTable.classList.add('hidden');
})
membersButton.addEventListener('click', () => {
    projectTable.classList.add('hidden');
})
scrumMasterButton.addEventListener('click', () => {
    projectTable.classList.add('hidden');
})
helpButton.addEventListener('click', () => {
    projectTable.classList.add('hidden');
})
logInButton.addEventListener('click', () => {
    projectTable.classList.add('hidden');
})

projectButton.addEventListener('click', () => {
    memberTable.classList.add('hidden');
})
dashboardButton.addEventListener('click', () => {
    memberTable.classList.add('hidden');
})
membersButton.addEventListener('click', () => {
    memberTable.classList.remove('hidden');
})
scrumMasterButton.addEventListener('click', () => {
    memberTable.classList.add('hidden');
})
helpButton.addEventListener('click', () => {
    memberTable.classList.add('hidden');
})
logInButton.addEventListener('click', () => {
    memberTable.classList.add('hidden');
})

projectButton.addEventListener('click', () => {
    scrumMasterTable.classList.add('hidden');
})
dashboardButton.addEventListener('click', () => {
    scrumMasterTable.classList.add('hidden');
})
membersButton.addEventListener('click', () => {
    scrumMasterTable.classList.add('hidden');
})
scrumMasterButton.addEventListener('click', () => {
    scrumMasterTable.classList.remove('hidden');
})
helpButton.addEventListener('click', () => {
    scrumMasterTable.classList.add('hidden');
})
logInButton.addEventListener('click', () => {
    scrumMasterTable.classList.add('hidden');
})

projectButton.addEventListener('click', () => {
    FAQ.classList.add('hidden');
})
dashboardButton.addEventListener('click', () => {
    FAQ.classList.add('hidden');
})
membersButton.addEventListener('click', () => {
    FAQ.classList.add('hidden');
})
scrumMasterButton.addEventListener('click', () => {
    FAQ.classList.add('hidden');
})
helpButton.addEventListener('click', () => {
    FAQ.classList.remove('hidden');
})
logInButton.addEventListener('click', () => {
    FAQ.classList.add('hidden');
})

projectButton.addEventListener('click', () => {
    dashboardpage.classList.add('hidden');
})
dashboardButton.addEventListener('click', () => {
    dashboardpage.classList.remove('hidden');
})
membersButton.addEventListener('click', () => {
    dashboardpage.classList.add('hidden');
})
scrumMasterButton.addEventListener('click', () => {
    dashboardpage.classList.add('hidden');
})
helpButton.addEventListener('click', () => {
    dashboardpage.classList.add('hidden');
})
logInButton.addEventListener('click', () => {
    dashboardpage.classList.add('hidden');
})


