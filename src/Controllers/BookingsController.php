<?php
/*
 * Gonebusy
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace GonebusyLib\Controllers;

use GonebusyLib\APIException;
use GonebusyLib\APIHelper;
use GonebusyLib\Configuration;
use GonebusyLib\Models;
use GonebusyLib\Exceptions;
use GonebusyLib\Http\HttpRequest;
use GonebusyLib\Http\HttpResponse;
use GonebusyLib\Http\HttpMethod;
use GonebusyLib\Http\HttpContext;
use GonebusyLib\Servers;
use GonebusyLib\CustomAuthUtility;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class BookingsController extends BaseController
{
    /**
     * @var BookingsController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return BookingsController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Cancel a Booking by id
     *
     * @param string $authorization    A valid API key, in the format 'Token API_KEY'
     * @param string $id               TODO: type description here
     * @param string $date             (optional) If a recurring booking, the date of an instance to cancel.  Several
     *                                 formats are supported: '2014-10-31', 'October 31, 2014'
     * @param string $endDate          (optional) If recurring, cancel up to :end_date or leave blank for infinite
     *                                 booking.  Several formats are supported: '2014-10-31', 'October 31, 2014'.
     * @param string $cancelRecurring  (optional) When a recurring booking, one of: ['instance', 'all', 'infinite']
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function cancelBookingById(
        $authorization,
        $id,
        $date = null,
        $endDate = null,
        $cancelRecurring = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/bookings/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'               => $id,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'date'             => $date,
            'end_date'         => $endDate,
            'cancel_recurring' => $cancelRecurring,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'     => 'GB-PHP-SDK',
            'Accept'         => 'application/json',
            'Authorization' => Configuration::$authorization,
            'Authorization'    => $authorization
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::DELETE, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::delete($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EntitiesErrorErrorException('Bad Request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorErrorException('Forbidden', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\EntitiesErrorErrorException('Not Found', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'GonebusyLib\\Models\\CancelBookingByIdResponse');
    }

    /**
     * Return list of Bookings.
     *
     * @param string  $authorization A valid API key, in the format 'Token API_KEY'
     * @param integer $userId        (optional) Retrieve Bookings for Resources/Services owned by this User Id.  You
     *                               must be authorized to manage this User Id.
     * @param string  $states        (optional) Comma-separated list of Booking states to retrieve only Bookings in
     *                               those states.  Leave blank to retrieve all Bookings.
     * @param integer $bookerId      (optional) Retrieve Bookings made by Booker Id.  Only Bookings for
     *                               Services/Resources you are authorized to manage will be returned.
     * @param integer $page          (optional) Page offset to fetch.
     * @param integer $perPage       (optional) Number of results to return per page.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBookings(
        $authorization,
        $userId = null,
        $states = null,
        $bookerId = null,
        $page = 1,
        $perPage = 10
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/bookings';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'user_id'       => $userId,
            'states'        => $states,
            'booker_id'     => $bookerId,
            'page'          => (null != $page) ? $page : 1,
            'per_page'      => (null != $perPage) ? $perPage : 10,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'GB-PHP-SDK',
            'Accept'        => 'application/json',
            'Authorization' => Configuration::$authorization,
            'Authorization'   => $authorization
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorErrorException('Forbidden', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\EntitiesErrorErrorException('Not Found', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'GonebusyLib\\Models\\GetBookingsResponse');
    }

    /**
     * Update a Booking by id
     *
     * @param string                       $authorization             A valid API key, in the format 'Token API_KEY'
     * @param string                       $id                        TODO: type description here
     * @param Models\UpdateBookingByIdBody $updateBookingByIdBody     (optional) the content of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function updateBookingById(
        $authorization,
        $id,
        $updateBookingByIdBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/bookings/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'                        => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'              => 'GB-PHP-SDK',
            'Accept'                  => 'application/json',
            'content-type'            => 'application/json; charset=utf-8',
            'Authorization' => Configuration::$authorization,
            'Authorization'             => $authorization
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::PUT, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::put($_queryUrl, $_headers, Request\Body::Json($updateBookingByIdBody));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EntitiesErrorErrorException('Bad Request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorErrorException('Forbidden', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\EntitiesErrorErrorException('Not Found', $_httpContext);
        }

        if ($response->code == 422) {
            throw new Exceptions\EntitiesErrorErrorException('Unprocessable Entity', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'GonebusyLib\\Models\\UpdateBookingByIdResponse');
    }

    /**
     * Return a Booking by id.
     *
     * @param string $authorization A valid API key, in the format 'Token API_KEY'
     * @param string $id            TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBookingById(
        $authorization,
        $id
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/bookings/{id}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'id'            => $id,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'GB-PHP-SDK',
            'Accept'        => 'application/json',
            'Authorization' => Configuration::$authorization,
            'Authorization'   => $authorization
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EntitiesErrorErrorException('Bad Request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorErrorException('Forbidden', $_httpContext);
        }

        if ($response->code == 404) {
            throw new Exceptions\EntitiesErrorErrorException('Not Found', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'GonebusyLib\\Models\\GetBookingByIdResponse');
    }

    /**
     * Create a Booking with params
     *
     * @param string                   $authorization       A valid API key, in the format 'Token API_KEY'
     * @param Models\CreateBookingBody $createBookingBody   (optional) the content of the request
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createBooking(
        $authorization,
        $createBookingBody = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::getBaseUri();
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/bookings/new';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'        => 'GB-PHP-SDK',
            'Accept'            => 'application/json',
            'content-type'      => 'application/json; charset=utf-8',
            'Authorization' => Configuration::$authorization,
            'Authorization'       => $authorization
        );

        //append custom auth authorization headers
        CustomAuthUtility::appendCustomAuthParams($_headers);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Json($createBookingBody));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\EntitiesErrorErrorException('Bad Request', $_httpContext);
        }

        if ($response->code == 401) {
            throw new Exceptions\EntitiesErrorErrorException('Unauthorized/Missing Token', $_httpContext);
        }

        if ($response->code == 403) {
            throw new Exceptions\EntitiesErrorErrorException('Forbidden', $_httpContext);
        }

        if ($response->code == 422) {
            throw new Exceptions\EntitiesErrorErrorException('Unprocessable Entity', $_httpContext);
        }

        if (($response->code < 200) || ($response->code > 208)) {
            throw new APIException('Unexpected error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'GonebusyLib\\Models\\CreateBookingResponse');
    }
}
