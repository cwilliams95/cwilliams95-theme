function initTitleAnim() {
  // Wrap every letter in a span
  jQuery('.page-title .letters').each(function(){
    jQuery(this).html(jQuery(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
  });

  anime.timeline({loop: false})
    .add({
      targets: '.page-title .letter',
      rotateY: [-90, 0],
      opacity: 1,
      duration: 1750,
      delay: function(el, i) {
        return 45 * i;
      }
    });
}
