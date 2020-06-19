Feature: Greetings, passerby
    In order to feel welcomed in the place where I am heading to
    As a passerby
    I want to be greet by the doorkeeper

    Scenario: Saying good morning to the doorkeeper
        Given I am a passerby with name "Walter"
        And there is a doorkeeper near the entrance
        When I say "Good morning, Jack" to the doorkeeper
        Then the doorkeeper will welcome me with words "Hello Walter, have a nice day!"

    Scenario: Be rude to the doorkeeper
        Given I am a passerby with name "Heisenberg"
        And there is a doorkeeper near the entrance
        When I say "Open the door you lazy human!" to the doorkeeper
        Then the doorkeeper will welcome me with silence

    Scenario: Just passing by the doorkeeper without saying a word
        Given I am a passerby with name "Jesse"
        And there is a doorkeeper near the entrance
        When I just pass by the doorkeeper
        Then the doorkeeper will welcome me with words "Good morning"
