
var LocsA = [
    {
        lat: 45.9,
        lon: 10.9,
        title: 'Title A1',
        html: '<h3>Content A1</h3>',
        icon: 'http://maps.google.com/mapfiles/markerA.png',
        animation: google.maps.Animation.DROP
    },
    {
        lat: 44.8,
        lon: 1.7,
        title: 'Title B1',
        html: '<h3>Content B1</h3>',
        icon: 'http://maps.google.com/mapfiles/markerB.png',
        show_infowindow: false
    },
    {
        lat: 51.5,
        lon: -1.1,
        title: 'Title C1',
        html: [
            '<h3>Content C1</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 8,
        icon: 'http://maps.google.com/mapfiles/markerC.png'
    }
];

var LocsAv2 = [
     {
        lat: 32.733331,
        lon: -97.114135,
        title: '<h5>South Arlington</h5><p>6407 S. Cooper St., Suite #117,<br>Arlington, TX 76001, 817-472-7601</p>',
        html: [
            '<h3 style="font-weight: 500;color: #07b6bc;line-height: 1.3;font-family: Helvetica Neue;font-size: 1rem;">SOUTH-ARLINGTON</h3><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue; margin-bottom=7px;">Call : <a class="linkmap" href="tel:817-472-7601">817-472-7601</a></p>',
            '<p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;margin-bottom:7px;">Email : <a class="linkmap" href="mailto:info@urgentcaretexas.com">info@urgentcaretexas.com</a></p><h5 class="h5map">Hours of Operation :</h5><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;">Monday – Saturday : 8:00 am to 9:00 pm<br>Sunday : 12:00 noon to 6:00 pm</p>'
        ].join(''),
        zoom: 8,
        icon: '/assets/images/marker-health.png'
        
    },
    {
        lat: 32.984975,
        lon: -96.994020,
        title: '<h5>Coppell</h5><p>651 N. Denton Tap Rd, #100,<br>Coppell, TX 75019, 972-899-1911</p>',
        html: [
            '<h3 style="font-weight: 500;color: #07b6bc;line-height: 1.3;font-family: Helvetica Neue;font-size: 1rem;">COPPELL</h3><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue; margin-bottom=7px;">Call : <a class="linkmap" href="tel:972-899-1911">972-899-1911</a></p>',
            '<p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;margin-bottom:7px;">Email : <a class="linkmap" href="mailto:info@urgentcaretexas.com">info@urgentcaretexas.com</a></p><h5 class="h5map">Hours of Operation :</h5><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;">Monday – Friday : 9:00 am to 7:00 pm<br>Saturday: 10:00am – 6:00pm<br>Sunday: 12 noon – 6:00pm</p>'
        ].join(''),
        zoom: 8,
        icon: '/assets/images/marker-health.png'
        
    },
    {
        lat: 32.333534,
        lon: -96.612425,
        title: '<h5>Ennis</h5><p>1200 Dolfie Ln,<br>Ennis, TX 75119, 972-875-4500</p>',
        html: [
            '<h3 style="font-weight: 500;color: #07b6bc;line-height: 1.3;font-family: Helvetica Neue;font-size: 1rem;">ENNIS</h3><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue; margin-bottom=7px;">Call : <a class="linkmap" href="tel:972-875-4500">972-875-4500</a></p>',
            '<p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;margin-bottom:7px;"></p><h5 class="h5map">Hours of Operation :</h5><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;">Monday – Friday : 9:00 am to 8:00 pm<br>Saturday: 9:00am – 5:00pm<br>Sunday: Closed</p>'
        ].join(''),
        zoom: 8,
        icon: '/assets/images/marker-health.png'
    },
    {
        lat: 33.421824,
        lon: -96.587513,
        title: '<h5>Van Alstyne</h5><p>920 West Van Alstyne Parkway,<br>Van Alstyne,Tx 75495, 903-482-5181</p>',
        html: [
            '<h3 style="font-weight: 500;color: #07b6bc;line-height: 1.3;font-family: Helvetica Neue;font-size: 1rem;">VAN ALSTYNE</h3><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue; margin-bottom=7px;">Call : <a class="linkmap" href="tel:903-482-5181">903-482-5181</a></p>',
            '<p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;margin-bottom:7px;">Email : <a class="linkmap" href="mailto:info@urgentcaretexas.com">info@urgentcaretexas.com</a></p><h5 class="h5map">Hours of Operation :</h5><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;">Monday – Friday : 9:00 am to 5:00 pm<br>No Weekends</p>'
        ].join(''),
        zoom: 8,
        icon: '/assets/images/marker-health.png'
    },
    {
        lat: 33.041807,
        lon: -96.769111,
        title: '<h5>Plano</h5><p>3909 W Parker Rd #104,<br>Plano, TX 75023, 469-609-3062</p>',
        html: [
            '<h3 style="font-weight: 500;color: #07b6bc;line-height: 1.3;font-family: Helvetica Neue;font-size: 1rem;">PLANO</h3><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue; margin-bottom=7px;">Call : <a class="linkmap" href="tel:469-609-3062">469-609-3062</a></p>',
            '<p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;margin-bottom:7px;">Email : <a class="linkmap" href="mailto:info@urgentcaretexas.com">info@urgentcaretexas.com</a></p><h5 class="h5map">Hours of Operation :</h5><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;">Monday – Friday : 9:00 am to 6:00 pm<br>Saturday : 10am-6pm<br> Sunday : Closed</p>'
        ].join(''),
        zoom: 8,
        icon: '/assets/images/marker-health.png'
    },
    {
        lat: 32.534082,
        lon: -97.335027,
        title: '<h5>Burleson</h5><p>633 SW Johnson Ave<br> Burleson, TX 76028, 817-295-5520 </p>',
        html: [
            '<h3 style="font-weight: 500;color: #07b6bc;line-height: 1.3;font-family: Helvetica Neue;font-size: 1rem;">Burleson</h3><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue; margin-bottom=7px;">Call : <a class="linkmap" href="tel:817-295-5520">817-295-5520</a></p>',
            '<p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;margin-bottom:0px;">Email : <a class="linkmap" href="mailto:info@urgentcaretexas.com">info@urgentcaretexas.com</a></p><h5 class="h5map">Hours of Operation :</h5><p style="color:#818387;font-size: 1rem;line-height: 1.5em; display: block;font-weight:normal;position: relative;font-family: Helvetica Neue;">Monday – Friday : 9:00 am to 6:00 pm<br>Saturday : 10am-6pm<br> Sunday : Closed</p>'
        ].join(''),
        zoom: 8,
        icon: '/assets/images/marker-health.png'
    }
];


var LocsB = [
    {
        lat: 52.1,
        lon: 11.3,
        title: 'Title A2',
        html: [
            '<h3>Content A2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 8
    },
    {
        lat: 51.2,
        lon: 22.2,
        title: 'Title B2',
        html: [
            '<h3>Content B2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 8
    },
    {
        lat: 49.4,
        lon: 35.9,
        title: 'Title C2',
        html: [
            '<h3>Content C2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 4
    },
    {
        lat: 47.8,
        lon: 15.6,
        title: 'Title D2',
        html: [
            '<h3>Content D2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 6
    }
];


var LocsBv2 = [
    {
        lat: 52.1,
        lon: 11.3,
        title: 'Title A2',
        html: [
            '<h3>Content A2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 8
    },
    {
        lat: 51.2,
        lon: 22.2,
        title: 'Title B2',
        html: [
            '<h3>Content B2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 8,
        type : 'circle',
        circle_options: {
            radius: 100000
        }
    },
    {
        lat: 49.4,
        lon: 35.9,
        title: 'Title C2',
        html: [
            '<h3>Content C2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 4
    },
    {
        lat: 47.8,
        lon: 15.6,
        title: 'Title D2',
        html: [
            '<h3>Content D2</h3>',
            '<p>Lorem Ipsum..</p>'
        ].join(''),
        zoom: 6
    }
];


var LocsAB = LocsA.concat(LocsB);


var LocsC = [
    {
        lat: 45.4654,
        lon: 9.1866,
        title: 'Milan, Italy',
        type : 'circle',
        circle_options: {
            radius: 1000
        },
        visible: false
    },
    {
        lat: 47.36854,
        lon: 8.53910,
        title: 'Zurich, Switzerland'
    },
    {
        lat: 48.892,
        lon: 2.359,
        title: 'Paris, France'
    },
    {
        lat: 48.13654,
        lon: 11.57706,
        title: 'Munich, Germany'
    }
];

var LocsD = [
    {
        lat: 45.4654,
        lon: 9.1866,
        title: 'Milan, Italy',
        html: '<h3>Milan, Italy</h3>'
    },
    {
        lat: 47.36854,
        lon: 8.53910,
        title: 'Zurich, Switzerland',
        html: '<h3>Zurich, Switzerland</h3>',
        visible: false
    },
    {
        lat: 48.892,
        lon: 2.359,
        title: 'Paris, France',
        html: '<h3>Paris, France</h3>',
        stopover: true
    },
    {
        lat: 48.13654,
        lon: 11.57706,
        title: 'Munich, Germany',
        html: '<h3>Munich, Germany</h3>'
    }
];

var Circles = [
    {
        lat: 51.51386,
        lon: -0.09559,
        title: 'Draggable marker',
        circle_options: {
            radius: 160
        },
        stroke_options: {
            strokeColor: '#aaaa00',
            fillColor: '#eeee00'
        },
        draggable: true
    },
    {
        lat: 51.51420,
        lon: -0.09303,
        title: 'Draggable circle',
        circle_options: {
            radius: 50
        },
        stroke_options: {
            strokeColor: '#aa0000',
            fillColor: '#ee0000'
        },
        visible: false,
        draggable: true
    },
    {
        lat: 51.51498,
        lon: -0.09097,
        circle_options: {
            radius: 80
        },
        visible: false,
        draggable: true
    },
    {
        lat: 51.51328,
        lon: -0.09021,
        circle_options: {
            radius: 160,
            editable: true
        },
        title: 'Editable circle',
        html: 'Change my size',
        visible: false,
        draggable: true
    },
    {
        lat: 51.51211,
        lon: -0.09050,
        circle_options: {
            radius: 130
        },
        stroke_options: {
            strokeColor: '#00aa00',
            fillColor: '#00aa00'
        },
        visible: false
    },
    {
        lat: 51.51226,
        lon: -0.09435,
        circle_options: {
            radius: 100
        },
        draggable: true
    },
    {
        lat: 51.513,
        lon: -0.08410,
        type: 'marker',
        title: 'Simple marker',
        html: 'I\'m a simple marker.'
    }
];
