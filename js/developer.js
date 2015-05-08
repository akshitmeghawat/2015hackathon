function showMyProject(){
  console.log("clicked");
  document.getElementById('myProject').style.visibilty = "visible";
  document.getElementById('allCurrentProjects').style.visibilty = "hidden";
  document.getElementById('developers').style.visibilty = "hidden";
  document.getElementById('editProfile').style.visibilty = "hidden";
};
function showAllProjects(){
  document.getElementById('myProject').style.visibilty = "hidden";
  document.getElementById('allCurrentProjects').style.visibilty = "visible";
  document.getElementById('developers').style.visibilty = "hidden";
  document.getElementById('editProfile').style.visibilty = "hidden";
};
function showDevelopers(){
  document.getElementById('myProject').style.visibilty = "hidden";
  document.getElementById('allCurrentProjects').style.visibilty = "hidden";
  document.getElementById('developers').style.visibilty = "visible";
  document.getElementById('editProfile').style.visibilty = "hidden";
};
function showSkillProfile(){
  document.getElementById('myProject').style.visibilty = "hidden";
  document.getElementById('allCurrentProjects').style.visibilty = "hidden";
  document.getElementById('developers').style.visibilty = "hidden";
  document.getElementById('editProfile').style.visibilty = "visible";
};