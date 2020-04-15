var sectionChapterList = document.querySelector('.chapterList');
if (sectionChapterList) {
    document.getElementById('main').style.display = "flex";
    document.getElementById('main').style.flex = "1";
}

var sectionUpdateComment = document.querySelector('.update-comment');
if (sectionUpdateComment) {
    document.getElementById('main').style.display = "flex";
    document.getElementById('main').style.flex = "1";
}

var menuDashboard = document.querySelector('.sidebar-dashboard-menu');
if (menuDashboard) {
    document.querySelector("section").style.padding = "0";
}

var currentPath = window.location.origin;

function btnProfile() {
    var btnProfile = document.querySelector('.btnProfile');
    if(btnProfile !== null) {
        btnProfile.onclick = function() {
        var pathName = "/projet4/profile?action=profile";
        window.location.href = currentPath + pathName;
        }
    } else {
        return false;
    }
};
btnProfile();

function btnSettings() {
    var btnSettings = document.querySelector('.btnSettings');
    if(btnSettings !== null) {
        btnSettings.onclick = function() {
            var pathName = "/projet4/settings?action=settings";
            window.location.href = currentPath + pathName;
        }
    } else {
        return false;
    }
};
btnSettings();

function btnLogOut() {
    var btnLogOut = document.querySelector('.btnLogOut');
    if(btnLogOut !== null) {
        btnLogOut.onclick = function() {
            var pathName = "/projet4/logout?action=logout";
            window.location.href = currentPath + pathName;
        }
      } else {
        return false;
    }
};
btnLogOut();

function btnCancelAddChapter() {
    var btnCancelAddChapter = document.querySelector('#btnCancelAddChapter');
    if(btnCancelAddChapter !== null) {
        btnCancelAddChapter.onclick = function() {
            var pathName = "/projet4/chapters?action=chapters";
            window.location.href = currentPath + pathName;
        }
    } else {
        return false;
    }
};
btnCancelAddChapter();

function btnCancelUpdateChapter() {
    //var btnCancelUpdateChapter = document.querySelector('#btnCancelUpdateChapter');
    //if(btnCancelUpdateChapter !== null) {
    //    btnCancelUpdateChapter.onclick = function() {
    //        var pathName = "/projet4/settings?action=settings";
    //        window.location.href = currentPath + pathName;
    //    }
    //} else {
    //    return false;
    //}
}
btnCancelUpdateChapter();

function btnCancelUpdateEmail() {
    var btnCancelUpdateEmail = document.querySelector('#btnCancelUpdateEmail');
    if(btnCancelUpdateEmail !== null) {
        btnCancelUpdateEmail.onclick = function() {
            var pathName = "/projet4/settings?action=settings";
            window.location.href = currentPath + pathName;
        }
    } else {
        return false;
    }
};
btnCancelUpdateEmail();

function btnCancelUpdatePassword() {
    var btnCancelUpdatePassword = document.querySelector('#btnCancelUpdatePassword');
    if(btnCancelUpdatePassword !== null) {
        btnCancelUpdatePassword.onclick = function() {
            var pathName = "/projet4/settings?action=settings";
            window.location.href = currentPath + pathName;
        }  
    } else {
        return false;
    }
};
btnCancelUpdatePassword();

function btnCancelDeleteAccount() {
    var btnCancelDeleteAccount = document.querySelector('#btnCancelDeleteAccount');
    if(btnCancelDeleteAccount !== null) {
        btnCancelDeleteAccount.onclick = function() {
            var pathName = "/projet4/settings?action=settings";
            window.location.href = currentPath + pathName;
        }
    } else {
        return false;
    }
};
btnCancelDeleteAccount();

function btnDeleteAccount() {
    var btnDeleteAccount = document.querySelector('#btnDeleteAccount');
    if(btnDeleteAccount !== null) {
        btnDeleteAccount.onclick = function() {
            var pathName = "/projet4/settings?action=deleteMyAccount";
            window.location.href = currentPath + pathName;
        }
    } else {
        return false;
    }
};
btnDeleteAccount();