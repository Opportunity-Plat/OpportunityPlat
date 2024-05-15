# OpportunityPlat

Please red our Wiki --> https://github.com/Opportunity-Plat/OpportunityPlat/wiki

# Usage

For the proper development of this project, it is necessary to work under a virtual environment to avoid problems with dependencies and their versions.

To create a virtual environment, execute:

    python -m venv OpportunityPlat

Activate the virtual environment:

    source OpportunityPlat/bin/activate

Finally, make sure you have pip installed and install the dependencies:

    pip install -r requirements.txt

This will install all the dependencies listed in the requirements.txt file in your virtual environment.

To run the server, use:

    flask --app /OpportunityPlat/Code/flaskr/app.py --debug run

# Note
The project was primarily developed on Linux. The instruction in step 2 is specific; check how to activate the environment on your operating system. Verify the versions in case it does not work with the requirements.txt.


