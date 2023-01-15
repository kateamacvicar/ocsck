document.querySelector("a.ham-icon").addEventListener("click", function(event){
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  });
  
  document.querySelector("a.close-btn").addEventListener("click", function(event){
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  });