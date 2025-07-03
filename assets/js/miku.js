L2Dwidget.init({
  model: {
    jsonPath: "/widget/model/miku/miku.model.json",
  },
  display: {
    position: "right",
    width: 200,
    height: 400,
    hOffset: 0,
    vOffset: -20,
  },
  mobile: {
    show: true,
    scale: 0.5,
    motion: true,
  },
  react: {
    opacityDefault: 1,
    opacityOnHover: 1
  }
});