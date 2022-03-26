const callPopup = jQuery(".call__popup");

if(callPopup.length) {
    callPopup.on("click", function (e) {
        e.preventDefault();
        const _this = jQuery(this),
            popup = jQuery("#" + _this.attr("data-target")),
            service = _this.attr("data-service");

        if(typeof service !== 'undefined' && service.length){
            popup.find('.tour-name').text(service);
        }
    });
}
const guideItems = $('.guide__item');
if(guideItems.length) {
    const popupBg = jQuery(".popup__show-bg");
    guideItems.on("click", function (e) {
        e.preventDefault();
        const _this = jQuery(this),
            popup = jQuery("#" + _this.attr("data-target"))

        console.log(popup);

        return popup.fadeIn() && popupBg.show();
    });
    jQuery(".popup").on("click", ".close", function () {
        return jQuery(this).closest(".popup").fadeOut("slow") && popupBg.fadeOut();
    });
}