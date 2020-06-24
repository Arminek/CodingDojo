Feature: Match cyclists base on ride parameters
    In order to find companion that likes same tempo, distance and time during trips
    As a cyclist
    I want to have companion that is interested in same type of trips

    @todo
    Scenario: Matching two cyclists that have similar average speed (+/- 3 km/h)
        Given there is cyclist "Jerry" with average speed 22 km/h
        And there is cyclist "Jon" with average speed 24 km/h
        And there is cyclist "Tom" with average speed 30 km/h
        And there is cyclist "Jane" with average speed 18 km/h
        And there is cyclist "Walt" with average speed 26 km/h
        And I am "Jerry"
        When I am looking for companion
        Then I get "Jon" and "Walt" as a proposition

    @todo
    Scenario: Matching two cyclists that have similar average distance (+/- 8 km)
        Given there is cyclist "Jerry" with average distance 30 km
        And there is cyclist "Jon" with average distance 25 km
        And there is cyclist "Tom" with average distance 42 km
        And there is cyclist "Jane" with average distance 15 km
        And there is cyclist "Walt" with average distance 31 km
        And I am "Jerry"
        When I am looking for companion
        Then I get "Jon" and "Walt" as a proposition

    @todo
    Scenario: Matching two cyclists that have similar average time (+/- 20 min)
        Given there is cyclist "Jerry" with average time 1h 30m
        And there is cyclist "Jon" with average time 2h 30m
        And there is cyclist "Tom" with average time 1h 05m
        And there is cyclist "Jane" with average time 1h 34m
        And there is cyclist "Walt" with average time 1h 40m
        And I am "Jerry"
        When I am looking for companion
        Then I get "Jane" and "Walt" as a proposition
