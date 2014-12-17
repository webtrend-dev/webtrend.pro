var myMap;

ymaps.ready(init);

function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").
    myMap = new ymaps.Map('wt_map', {
        center: [55.70802928, 37.65281350],
        zoom: 15,
        controls: []
    });
    myMap.behaviors.disable('scrollZoom');
    myMap.controls.add('zoomControl', {
      size: "large"
    });

     var polygonLayout = ymaps.templateLayoutFactory.createClass('<div class="placemark_layout_container"><div class="polygon_layout"></div></div>');
     var wtPlacemark = new ymaps.Placemark(
        [55.70802928, 37.65281350], {
            balloonContentHeader: '',
            balloonContentBody: '<span class="wt-map-building">ОЦ Деловой</span><span class="wt-map-address">ул. Ленинская Слободa, д.19</span>',
            balloonContentFooter: '<span class="wt-map-phone">ТЕЛ. +7 (495) 777-95-87</span>'
        }, {
            iconLayout: polygonLayout,

            iconShape: {   
                type: 'Polygon',
                // Полигон описывается в виде трехмерного массива. Массив верхнего уровня содержит контуры полигона. 
                // Первый элемента массива - это внешний контур, а остальные - внутренние.
                coordinates: [
                    // Описание внешнего контура полигона в виде массива координат.
                    [[-10,6],[-10,-132],[68,-132],[68,-17],[13,-17]]
                    // , ... Описание внутренних контуров - пустых областей внутри внешнего.
                ]
            }
        }
    );
    myMap.geoObjects.add(wtPlacemark);
}