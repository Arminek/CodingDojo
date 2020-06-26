Feature: Match cyclists base on similar routes
    In order to find companion that likes same kind of routes
    As a cyclist
    I want to have companion during my favorites routes

    Background:
        Given there is cyclist "Jerry"
        And "Jerry" has favorite routes
            | name       | distance |
            | Fort No    |     18,9 |
            | North Azad |     23,1 |
        And there is cyclist "Jane"
        And "Jane" has favorite routes
            | name        | distance |
            | Waneedgates |     14,9 |
            | West        |     17,1 |

    @domain
    Scenario: Matching two cyclists that have at least 2 routes with similarity score above 0,8
        Given I am "Jerry"
        And these routes are similar to each other in
            | first route | second route | similarity |
            | Fort No     | West         |      0.98  |
            | Fort No     | Waneedgates  |      0.88  |
            | North Azad  | Waneedgates  |      0.68  |
            | North Azad  | West         |      0.48  |
        When I am looking for companion
        Then I get "Jane" as proposition

    @domain
    Scenario: Matching two cyclists that have at least 2 routes with similarity score above 0,8
        Given I am "Jerry"
        And these routes are similar to each other in
            | first route | second route | similarity |
            | Fort No     | West         |      0.98  |
            | Fort No     | Waneedgates  |      0.48  |
            | North Azad  | Waneedgates  |      0.38  |
            | North Azad  | West         |      0.48  |
        When I am looking for companion
        Then I get no matches
