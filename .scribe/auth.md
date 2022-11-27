# Authenticating requests

To authenticate requests, include an **`Authorization`** header with the value **`"Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ91iAVvZjwus.zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRlAbjg3wped7eWZK.7SOmNVwhdducsM1rnSg962wjw2022111P5LurVbeLgatvA2611fjhj73Ae8riw4G1fQ1r2rI77LTN2r47NfvH1108frTh7PrfNg26dsSPHkjNiyxt7rFMW6pQWre72e51ePwYeQlltgVqVDi"`**.

All authenticated endpoints are marked with a `requires authentication` badge in the documentation below.

You can refresh your token at url : `auth/refresh` or login at url : `auth/login`
