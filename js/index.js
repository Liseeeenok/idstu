seminars_slider = document.getElementById('seminars_slider');
seminars_slider_div = seminars_slider.getElementsByTagName('div');
for (var i = 0; i < seminars_slider_div.length; i++) {
    seminars_slider_div[i].addEventListener('click', (el) => {
        for (element of seminars_slider_div) {
            element.style.backgroundColor = "#ffffff";
        }
        el.srcElement.style.backgroundColor = "#145f9a";

    })
}

publications_slider = document.getElementById('publications_slider');
publications_slider_div = publications_slider.getElementsByTagName('div');
for (var i = 0; i < publications_slider_div.length; i++) {
    publications_slider_div[i].addEventListener('click', (el) => {
        for (element of publications_slider_div) {
            element.style.backgroundColor = "#ffffff";
        }
        el.srcElement.style.backgroundColor = "#145f9a";

    })
}

