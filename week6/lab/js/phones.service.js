(function() {
    
    'use strict';
    angular
            .module('app')
            .factory('PhonesService', PhonesService);
    
    PhonesService.$inject = ['$http', 'REQUEST'];
    
    
   //Create service using AJAX call with built-in promise. Injecting REQUEST constant to know location of data to call
   //Service makes a call to get json data
    function PhonesService($http, REQUEST){
        
        var url = REQUEST.Phones;
        var service = {
            'getPhones' : getPhones,
            'findPhone' : findPhone
        };
        return service;
        
        ////
        
        function getPhones(){
            return $http.get(url)
                    .then(getPhonesComplete, getPhonesFailed);
            
            function getPhonesComplete(response){
                return response.data;
            }
            function getPhonesFailed(error){
                return [];
            }
        }
        
        //find result of one phone by looping through and matching them by their id with one we are looking for
        function findPhone(id){
            return getPhones()
                    .then(function(data){
                        return findPhoneComplete(data);;
            });
            
            function findPhoneComplete(data){
                var results = {};
                
                angular.forEach(data, function (value,key){
                    if(!results.length){
                        if(value.hasOwnProperty('id') && value.id === id){
                            results = angular.copy(value);
                        }
                    }
                }, results);
                
                return results
                
            }
        }
        
        
    }
    
})();