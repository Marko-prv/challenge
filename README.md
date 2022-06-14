Task 1: Response Structure
    This Task was done in two variants.
    1.1 JSON Response
        A json file with the units was imported and can be accessed via the endpoint 
    1.2 Database integration
        To provide a more generic response tables from the models with its relations have been added.
        for each model the available data can be retrieved via three endpoints. The data is provided as json. For the language
        a table has been added.


Task 2: API Endpoints
    Four endpoints have been added: 
    '/'   returns the json data from the file 
    '/unittypes' returns all unitypes as json
    '/locations' returns all locations as json
    '/units' returns all units as json

    The logic was tested with sample data using tableplus
 