// ********       **********
//    **          **      **
//    **          **********
//    **     **   **      **

function changeLanguage(lang) {
    const openLanguageElement = document.getElementById("openLanguage");

    if (openLanguageElement) {
        openLanguageElement.style.display = "none";
    }

    const selectedLanguageElement = document.getElementById("selectedLanguage");
    const languageFlagElement = document.getElementById("languageFlag");

    if (selectedLanguageElement && languageFlagElement) {
        if (lang === "en") {
            selectedLanguageElement.innerText = "English";
            languageFlagElement.src = "/images/system/en.png";
        } else {
            selectedLanguageElement.innerText = "Türkçe";
            languageFlagElement.src = "/images/system/tr.svg";
        }

        window.location.href = `/greeting/${lang}`;
    }
}
function openItem(item) {
    var status = document.getElementById(item).style.display;
    if (status == "block") {
        document.getElementById(item).style.display = "none";
    } else {
        document.getElementById(item).style.display = "block";
    }
}
$(window).scroll(function () {
    if ($(this).scrollTop() > 110) {
        $(".menu_main").addClass("scrolled");
    } else {
        $(".menu_main").removeClass("scrolled");
    }
});
// skill start
function updateProgressBar(skill, targetWidth, interval) {
    const skillRateInner = skill.querySelector(".skill-rate-inner");
    const rateText = skill.querySelector(".rate-text");
    let currentWidth = 0;

    const timer = setInterval(() => {
        currentWidth++;
        skillRateInner.style.width = `${currentWidth}%`;
        rateText.textContent = `${currentWidth}%`;

        if (currentWidth >= targetWidth) {
            clearInterval(timer);
        }
    }, interval);

    return timer;
}

const reactNativeSkill = document.querySelector(".skill:nth-of-type(1)");
const cssSkill = document.querySelector(".skill:nth-of-type(2)");
const javaScriptSkill = document.querySelector(".skill:nth-of-type(3)");
let reactNativeTimer, cssTimer, javaScriptTimer;

function resetProgressBars() {
    clearInterval(reactNativeTimer);
    clearInterval(cssTimer);
    clearInterval(javaScriptTimer);

    const reactNativeRateInner =
        reactNativeSkill.querySelector(".skill-rate-inner");
    const cssRateInner = cssSkill.querySelector(".skill-rate-inner");
    const javaScriptRateInnder =
        javaScriptSkill.querySelector(".skill-rate-inner");

    reactNativeRateInner.style.width = "0";
    cssRateInner.style.width = "0";
    javaScriptRateInnder.style.width = "0";
    reactNativeSkill.querySelector(".rate-text").textContent = "0%";
    cssSkill.querySelector(".rate-text").textContent = "0%";
    javaScriptSkill.querySelector(".rate-text").textContent = "0%";
}

function handleScroll() {
    const scrollDirection =
        window.scrollY > this.previousScroll ? "down" : "up";
    this.previousScroll = window.scrollY;
    reactNativeTimer = updateProgressBar(reactNativeSkill, 1, 78);
    cssTimer = updateProgressBar(cssSkill, 1, 100);
    javaScriptTimer = updateProgressBar(javaScriptSkill, 1, 90);
    if (scrollDirection === "down") {
        resetProgressBars();
        reactNativeTimer = updateProgressBar(reactNativeSkill, 78, 1);
        cssTimer = updateProgressBar(cssSkill, 100, 1);
        javaScriptTimer = updateProgressBar(javaScriptSkill, 90, 1);
    }
}

window.addEventListener("scroll", handleScroll);
// menu stary
const menuItems = document.querySelectorAll('a[href^="#"]');

// function handleMenuClick(event) {
//     event.preventDefault();
//     const targetId = this.getAttribute("href");
//     const targetSection = document.querySelector(targetId);

//     // Scroll to the target section
//     targetSection.scrollIntoView({ behavior: "smooth" });

//     // Remove active class from all menu items
//     menuItems.forEach((item) => {
//         item.classList.remove("active_menu_class");
//         item.classList.add("pasive_menu_class");
//     });

//     // Add active class to the clicked menu item
//     this.classList.remove("pasive_menu_class");
//     this.classList.add("active_menu_class");
// }

// Attach click event listeners to all menu items
// menuItems.forEach((item) => {
//     item.addEventListener("click", handleMenuClick);
// });

// Listen for scroll events to highlight the menu item for the current section

//  menu startk
const menuItemsHome = document.querySelectorAll("a[href]");
const homeLink = document.querySelector('a[href=""]');

function handleMenuClick(event) {
    event.preventDefault();
    const targetId = this.getAttribute("href");

    console.log(targetId);
    const targetSection = document.querySelector(targetId);

    if (targetId === "") {
        // If the target is the home link, reload the page
        location.reload();
    } else {
        // Scroll to the target section
        targetSection.scrollIntoView({ behavior: "smooth" });

        // Remove active class from all menu items
        menuItemsHome.forEach((item) => {
            item.classList.remove("active_menu_class");
            item.classList.add("pasive_menu_class");
        });

        // Add active class to the clicked menu item
        this.classList.remove("pasive_menu_class");
        this.classList.add("active_menu_class");
    }
}

// Attach click event listeners to all menu items
menuItemsHome.forEach((item) => {
    item.addEventListener("click", handleMenuClick);
});

// Listen for scroll events to highlight the menu item for the current section
window.addEventListener("scroll", () => {
    const scrollPosition = window.scrollY;
    const sections = document.querySelectorAll("section");

    sections.forEach((section) => {
        if (
            scrollPosition >= section.offsetTop &&
            scrollPosition < section.offsetTop + section.offsetHeight
        ) {
            const targetId = `#${section.id}`;
            const targetMenuItem = document.querySelector(
                `a[href="${targetId}"]`
            );

            // Remove active class from all menu items
            menuItemsHome.forEach((item) => {
                item.classList.remove("active_menu_class");
                item.classList.add("pasive_menu_class");
            });

            // Add active class to the menu item corresponding to the current section
            targetMenuItem.classList.remove("pasive_menu_class");
            targetMenuItem.classList.add("active_menu_class");
        }
    });
});
// hover start
$(document).ready(function () {
    $(".componenet_about_card").on("mousemove", function (e) {
        var offsetX = e.clientX - $(this).offset().left;
        var offsetY = e.clientY - $(this).offset().top;

        var width = $(this).outerWidth();
        var height = $(this).outerHeight();

        var skewAmount = 1; // Skew amount in degrees

        var skewX = (offsetX / width - 0.5) * skewAmount;
        var skewY = (offsetY / height - 0.5) * skewAmount;

        $(this).css("transform", "skew(" + skewX + "deg, " + skewY + "deg)");
    });

    $(".componenet_about_card").on("mouseleave", function () {
        $(this).css("transform", "none");
    });
});
$(".sliderProjects").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    dots: true,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 1300,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
            },
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});
$("form").submit(function (e) {
    e.preventDefault();
    var form = $(this);
    $.ajax({
        type: form.attr("method"),
        url: form.attr("action"),
        data: form.serialize(),
        success: function (response) {
            alert(response.message);
            form.find("input, textarea").val(""); // Inputları temizle
        },
        error: function (xhr, status, error) {
            document.getElementById("messageModal").style.display = "flex";
            setTimeout(function () {
                document.getElementById("messageModal").style.display = "none";
            }, 2000);
            form.find("input, textarea").val("");
            if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            alert(errorMessage);
        },
    });
});

const downloadCV = () => {
    location.href = "cv-indir";
};
function mobileMenuToggle() {
    var menu = document.querySelector(".mobilemenu");
    var icon = document.querySelector(".mobileIconsGenerate i");

    if (menu.style.transform === "translateX(-200%)") {
        menu.style.transform = "translateX(0)";
        icon.classList.remove("fa-bars-staggered");
        icon.classList.add("fa-times");
    } else {
        menu.style.transform = "translateX(-200%)";
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars-staggered");
    }
}
function instagram() {
    window.open("https://www.instagram.com/tahsinakyoll");
}
function linkedin() {
    window.open("https://www.linkedin.com/in/tahsin-akyol-022335232");
}
function github() {
    window.open("https://github.com/Tahsinakyol");
}
