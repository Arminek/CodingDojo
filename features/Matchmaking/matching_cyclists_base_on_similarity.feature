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
            | Whaming    |     22,3 |
            | Sandmid    |     25,4 |
            | St Niru    |     25,4 |
        And there is cyclist "Jane"
        And "Jane" has favorite routes
            | name                | distance |
            | Waneedgates         |     14,9 |
            | West                |     17,1 |
            | La Shead            |     23,2 |
            | Fort Shingbroadkids |     21,1 |
        And these routes are similar to each other in
            | first route | second route | similarity |
            | Fort No     | La Shead     |      0,98  |
            | North Azad  | Sandmid      |      0,88  |
            | Waneedgates | St Niru      |      0,96  |

    @domain
    Scenario: Matching two cyclists that have at least 3 routes with similarity score above 0,8
        Given I am "Jerry"
        When I am looking for companion
        Then I get "Jane" as proposition
