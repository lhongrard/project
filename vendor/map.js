var map;
var marker = [];
var gmarkers = [];
var housemarker = []

var map2;
var marker2 = [];
var gmarkers2 = [];

var infowindow;

function initMap() {

    // KK var latStr = 16.4775561 var lngStr = 102.8209163 SAP

    var latStr = localStorage.getItem("local_lat");
    var lngStr = localStorage.getItem("local_lng");

    // lat: 15.148766, lng: 100.2343355

    var uluru = {
        lat: parseFloat(latStr),
        lng: parseFloat(lngStr)
    };

    map = new google
        .maps
        .Map(document.getElementById('map'), {
            zoom: 14,
            center: uluru,
            mapTypeId: 'satellite'
        });

    // if (navigator.geolocation) {
    //     navigator
    //         .geolocation
    //         .getCurrentPosition(function (position) {

    //             var globle_lat = position.coords.latitude
    //             var globle_lng = position.coords.longitude

    //             // alert(globle_lat)
    //             // alert(globle_lng)

    //         }, function () {
    //             alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
    //             // $("#btnSetCenter").removeClass("loading");
    //         });
    // } else {
    //     // Browser doesn't support Geolocation
    //     alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
    //     // $("##btnSetCenter").removeClass("loading");
    // }

    infowindow = new google
        .maps
        .InfoWindow();

    // GET MARKER FROM DATABASE

    $
        .ajax({
            method: "GET",
            url: "https://bayclouds.com/getMarkerHouse/" + localStorage.getItem('token')
        })
        .done(function (msg) {
            console.log(msg)
            if (msg.status == "ok") {
                $
                    .each(msg.data, function (key, value) {
                        // console.log(value.house_location_lat+" "+value.house_location_lng)
                        housemarker = new google
                            .maps
                            .Marker({
                                position: {
                                    lat: parseFloat(value.house_location_lat),
                                    lng: parseFloat(value.house_location_lng)
                                },
                                animation: google.maps.Animation.DROP,
                                map: map,
                                icon: './markers/blue_MarkerS.png'
                            });



                        google
                            .maps
                            .event
                            .addListener(housemarker, 'click', (function (marker, i) {
                                return function () {

                                    $
                                        .ajax({
                                            method: "GET",
                                            url: "https://bayclouds.com/getMarkerHouse/house/" + value.house_id + "/" + localStorage.getItem('token')
                                        })
                                        .done(function (msg) {
                                            console.warn(msg)
                                            if (msg.status == "ok") {
                                                var table = ""
                                                $('#tableHousehold').empty();

                                                $.each(msg.data, function (key, value) {
                                                    var person = `<tr><td><b> ${value.dweller} </b></td><td> ชื่อ : ${value.firstname} ${value.lastname} </td></tr>`
                                                    $('#tableHousehold').append(person)
                                                })

                                            } else {
                                                alert("การเชื่อมต่อข้อมูลเกิดปัญหาค่ะ")
                                            }
                                        })

                                    infowindow.setContent(`
                                    <h4><center> บ้านเลขที่ : ${value.house_no} </center></h4>
                                    <img style="width: 300px; height: 250px;margin-left: 25px;" src="https://bayclouds.com/imghouse/${value.image}"> <br>
                                    <table style="margin-left: 25px;" class="mt-3">
                                    <thead>
                                      <tr>
                                          <th>สถานะ</th>
                                          <th>ชื่อ-สกุล</th>
                                      </tr>
                                    </thead>

                                    <tbody id="tableHousehold">
                                    </tbody>
                                  </table>

                                  <p><center><a href=" https://www.google.co.th/maps/dir//${value.house_location_lat},${value.house_location_lng}"><i class="fa fa-map-marker" aria-hidden="true"></i> นำทาง </a> </center></p>
                                  `);
                                    infowindow.open(map, marker);
                                }
                            })(housemarker, key));
                    });
            }
        })

    // $     .ajax({method: "GET", url: "https://bayclouds.com/getMarker"})
    // .done(function (msg) {         console.log(msg)         if (msg.status ==
    // "ok") {             $                 .each(msg.data, function (key, value) {
    //                     // console.log(value.house_location_lat+"
    // "+value.house_location_lng)                     sapaya_marker = new google
    //                      .maps                         .Marker({
    //            position: {                                 lat: value.lat,
    //                          lng: value.lng                             },
    //                      animation: google.maps.Animation.DROP,
    //           map: map,                             // icon:
    // './markers/blue_MarkerS.png'                         });
    // google                         .maps                         .event
    //               .addListener(sapaya_marker, 'click', (function (marker, i) {
    //                          return function () {
    // var house_no = value.house_no                                 var house_id =
    // value.house_id                                 var vilage_no =
    // value.vilage_no                                 // console.log(house_no) if(
    // house_no.indexOf('/')  != -1 ){     house_no =
    //  // house_no.replace('/','_') }                                 //
    // https://bayclouds.com/getMarker/status/18040136066
    //      $                                     .ajax({
    //              method: "GET",                                         url:
    // "https://bayclouds.com/getMarker/status/" + house_id
    //            })                                     .done(function (msg) {
    //                                    console.warn(msg)
    //                if (msg.status == "ok") {
    //        var status = ""
    // $('#status').empty();                                             if
    // (msg.data.length == 1) {                                                 var
    // txt = `<p> สถานะ : <span class="blink" ><a class="blink"
    // style="color:green;text-decoration: underline !important;"
    // onclick="setHouseId(${house_id},${house_no},${vilage_no})" > สำรวจแล้ว </a>
    // </span></p>`
    // $('#status').append(txt)                                             } else {
    //                                                 var txt = `<p> สถานะ : <span
    // class="blink" ><a class="blink" style="color:red;text-decoration: underline
    // !important;" onclick="setHouseId(${house_id},${house_no},${vilage_no})">
    // ยังไม่สำรวจ </a> </span></p>`
    // $('#status').append(txt)                                             }
    //                                  } else {
    //         alert("การเชื่อมต่อข้อมูลเกิดปัญหาค่ะ กรุณาติดต่อ")
    //                       }                                     })
    //                  $                                     .ajax({
    //                          method: "GET",
    //   url: "https://bayclouds.com/getMarker/populate/" + house_id
    //                     })                                     .done(function
    // (msg) {                                         console.warn(msg)
    //                             if (msg.status == "ok") {
    //                     var table = ""
    //  $('#tableHouse').empty();
    // $.each(msg.data, function (key, value) {
    //            var person = `<tr><td><b> ${value.dweller} </b></td><td> ชื่อ :
    // ${value.firstname} ${value.lastname} </td></tr>`
    //                    $('#tableHouse').append(person)
    //                  })                                         } else {
    //                                    alert("การเชื่อมต่อข้อมูลเกิดปัญหาค่ะ
    // กรุณาติดต่อ")                                         }
    //               })
    // infowindow.setContent("<h4><center>บ้านเลขที่ : " + value.house_no +
    // `</center></h4><br><img style="width: 300px; height: 250px;margin-left: 25px;
    // " src="https://ogs.co.th/basemap/images/${value.image}"> <br>  <table
    // style="margin-left: 25px;">                             <thead>
    //                 <tr>                                   <th>สถานะ</th>
    //                           <th>ชื่อ-สกุล</th>
    // </tr>                             </thead>                             <tbody
    // id="tableHouse">                             </tbody>
    //   </table>                             <center><div
    // id="status"></div></center>                           `);
    //             infowindow.open(map, marker);                             }
    //                   })(sapaya_marker, key));                 });         }
    // })

}

function setCenter(getMap) {

    // $("#"+btnLoad).addClass("loading");
    $('#btnSetCenter').addClass("loading");

    // marker = [] Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator
            .geolocation
            .getCurrentPosition(function (position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                map.setCenter(pos);
                map.setZoom(15);
                $("#btnSetCenter").removeClass("loading");

            }, function () {
                alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
                $("#btnSetCenter").removeClass("loading");
            });
    } else {
        // Browser doesn't support Geolocation
        alert("อุปกรณ์ของคุณไม่สนับสนุนระบบ GPS Geolocation")
        $("##btnSetCenter").removeClass("loading");
    }

}

function setHouseId(id, hno, vno) {
    localStorage.setItem('house_id', id);
    localStorage.setItem('house_no', hno);
    localStorage.setItem('vilage_no', vno);
    location.replace("household.html?from_map_id=" + id + "&vno=" + vno);
}
