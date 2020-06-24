Feature: Create cyclist profile
    In order to track routes
    As a cyclist
    I want to have one place where I can have my favorite routes

    @todo
    Scenario: Create profile
        When I want to create new profile with name "Walter"
        Then I have new profile created with name "Walter"

    @todo
    Scenario: Adding routes
        Given there is cyclist "Walter"
        When I add new route with
            | name       | distance | avg speed | time   |
            | Fort No    |     18,9 |   20 km/h | 1h 10m |
            | North Azad |     23,1 |   24 km/h | 1h 30m |
        Then I have these routes added to my profile
            | name       | distance | avg speed | time   |
            | Fort No    |     18,9 |   20 km/h | 1h 10m |
            | North Azad |     23,1 |   24 km/h | 1h 30m |

    @todo
    Scenario: Marking as route as favorite
        Given there is cyclist "Walter"
        And I have routes added to my profile
            | name       | distance | avg speed | time   |
            | Fort No    |     18,9 |   20 km/h | 1h 10m |
            | North Azad |     23,1 |   24 km/h | 1h 30m |
        When I mark "North Azad" as my favorite
        Then it should be marked
