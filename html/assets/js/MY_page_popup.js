const Mppopup = document.querySelector(".MP__popup");
const MppopupBnt = document.querySelector(".MP__page__ch__btn li a");
const MppopupMain = document.querySelector(".MP__Popup__main");

MppopupBnt.addEventListener("click", () => {
    Mppopup.classList.remove("blind");
});
MppopupMain.addEventListener("click", () => {
    Mppopup.classList.add("blind");
});
