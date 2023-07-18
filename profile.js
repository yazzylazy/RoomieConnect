function showTab(tabName) {
    const tabs = document.querySelectorAll('.tab');
    const tabContents = document.querySelectorAll('.tab-content');
  
    tabs.forEach(tab => tab.classList.remove('active'));
    tabContents.forEach(content => content.classList.remove('active'));
  
    const selectedTab = document.querySelector(`.${tabName}`);
    const selectedContent = document.querySelector(`.tab-content.${tabName}`);
    
    selectedTab.classList.add('active');
    selectedContent.classList.add('active');
  }
  
  function startChat(chatPage) {
    window.location.href = chatPage;
  }
  
  function showConfirmationDialog(matchName) {
    const confirmMessage = `Are you sure you want to match with ${matchName}?`;
  
    if (confirm(confirmMessage)) {
      window.location.href = 'confirm.html';
    }
  }
  
  