/**
 * Created by Konstantinos Tsatsarounos<konstantinos.tsatsarounos@gmail.com on 2/11/2016.
 * Project: CurrencyTable
 * File Name:
 */

(function () {
    angular.module('CurrencyTable', ['ngResource'])
        .service('currencies', ['$resource', Currencies])
        .controller('HomeController', ['$timeout', 'currencies', HomeController]);

    function Currencies($resource) {
        var currenciesResource = $resource('/app/caller.php', {}, {
            get: {isArray: false}
        });
        return {
            get: function (callback) {
                currenciesResource.get({}, callback);
            }
        }
    }

    /**
     *
     * @param $timeout
     * @param currencies
     * @constructor
     */
    function HomeController($timeout, currencies) {
        var $ctrl = this;

        $timeout(function () {
            currencies.get(function (response) {
                $ctrl.currencies = parseRates(response);
            });
        },3000);
    }

    /**
     *
     * @param object
     * @return {Array}
     */
    function parseRates(object) {
        var rates = [], count = 0;
        for(var key in object.rates){
            rates[count] = { name: key, value: object.rates[key]};
            count++;
        } return rates;
    }

}());
