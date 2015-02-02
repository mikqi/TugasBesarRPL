angular.module('MyApp', ['lumx',
  'ui.bootstrap', 
  'ngRoute',
  'firebase',
  ]);

angular.module('MyApp').config(['$routeProvider', '$locationProvider',  function($routeProvider, $locationProvider) {

  $routeProvider
  // route for the home page
    .when('/', {
      templateUrl: 'src/templates/login.html',
      controller: 'loginCtrl'
    })
    // route for the about page
    .when('/about', {
      templateUrl: 'src/templates/about.html',
      controller: 'aboutCtrl'
    })
    .when('/home', {
      templateUrl: 'src/templates/home.html',
      controller: 'mainCtrl'
    })
    /**
     * ROUTE PELAYAN
     * @type {}
     */
    .when('/pelayan/kategori', {
      templateUrl: 'src/templates/pelayan/kategori.html',
      controller: 'kategoriCtrl'
    })
    .when('/pelayan/allmenu', {
      templateUrl: 'src/templates/pelayan/allMenu.html',
      controller: 'allMenuCtrl'
    })
    .when('/pelayan/meja', {
      templateUrl: 'src/templates/pelayan/meja.html',
      controller: 'mejaCtrl'
    })
    .when('/pelayan/detailpesanan', {
      templateUrl: 'src/templates/pelayan/detailpesanan.html',
      controller: 'detailPesananPelayanCtrl'
    })
    .when('/pelayan/listpesanan', {
      templateUrl: 'src/templates/pelayan/listpesanan.html',
      controller: 'listPesananPelayanCtrl'
    })
    /**
     * KASIR
     * @type {}
     */
    .when('/kasir/listpesanan', {
      templateUrl: 'src/templates/kasir/listpesanan.html',
      controller: 'listPesananKasirCtrl'
    })
    .when('/kasir/detailpesanan', {
      templateUrl: 'src/templates/kasir/detailpesanan.html',
      controller: 'detailPesananKasirCtrl'
    })
    /**
     * KOKI ROUTE
     * @type {}
     */
    .when('/koki/menu', {
      templateUrl: 'src/templates/koki/crudMenu.html',
      controller: 'kokiMenuCtrl'
    })
    .when('/koki/listpesanan', {
      templateUrl: 'src/templates/koki/listpesanan.html',
      controller: 'listPesananKokiCtrl'
    })
    .when('/koki/detailpesanan', {
      templateUrl: 'src/templates/koki/detailpesanan.html',
      controller: 'detailPesananKokiCtrl'
    })

    /**
     * CUSTOMER SERVICE ROUTE
     * @type {String}
     */
    .when('/cs/pertanyaan', {
      templateUrl: 'src/templates/cs/pertanyaan.html',
      controller: 'pertanyaanCtrl'
    })
    /**
     * ROUTE PEGAWAI
     * @type {}
     */
    .when('/admin/pegawai', {
      templateUrl: 'src/templates/admin/crudPegawai.html',
      controller: 'pegawaiCtrl'
    })
    .when('/pantry/editbahan', {
      templateUrl: 'src/templates/pantry/editbahan.html',
      controller: 'editBahanCtrl'
    })

    $locationProvider.html5Mode(true);

}])