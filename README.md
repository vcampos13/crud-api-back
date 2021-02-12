<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Thanks again! Now go create something AMAZING! :D
***
***
***
*** To avoid retyping too much info. Do a search and replace for the following:
*** github_username, repo_name, twitter_handle, email, project_title, project_description
-->



<!-- PROJECT SHIELDS -->
<!--
*** I'm using markdown "reference style" links for readability.
*** Reference links are enclosed in brackets [ ] instead of parentheses ( ).
*** See the bottom of this document for the declaration of the reference variables
*** for contributors-url, forks-url, etc. This is an optional, concise syntax you may use.
*** https://www.markdownguide.org/basic-syntax/#reference-style-links
-->
[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![GNU License][license-shield]][license-url]


<!-- PROJECT LOGO -->
<br />
<p align="center">
  
  <h3 align="center">Crud-Api-Back</h3>

  <p align="center">
    Project created with the intention of learning the development of a backend application in PHP using the Laravel Framework that will receive requests sent by a VUE frontend API.
    <br />
    <br />
    <!-- <a href="https://github.com/vcampos13/crud-api-back">View Demo</a> -->
    <!-- · -->
    <a href="https://github.com/vcampos13/crud-api-back/issues">Report Bug</a>
    ·
    <a href="https://github.com/vcampos13/crud-api-back/issues">Request Feature</a>
  </p>
</p>



<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

The project was created with the intention of learning how to use PHP + Laravel + Passport to create an application that will receive JSON requests sent by the frontend, and return responses according to the type of request.


### Built With

* [PHP](https://www.php.net/)
* [Laravel](https://laravel.com/)
* [Passport](https://github.com/laravel/passport)

<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

To execute this project, the VUE frontend found in the following repository is recommended but not necessary:<br>
[crud-vue-front](https://github.com/vcampos13/crud-vue-front/)

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/vcampos13/crud-api-back.git
   ```
2. Install using npm 
   ```sh
   npm install
   ```
3. Migrate Database 
   ```sh
   php artisan migrate
   ```
4. Create a passport client Token (when asked about the name choose anyone who pleases you)
   ```sh
   php artisan passport:client --personal
   ```
   
   

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request



<!-- LICENSE -->
## License

Distributed under the GNU License. See `LICENSE` for more information.


<!-- CONTACT -->
## Contact

Victor Campos - [Linkedin](https://www.linkedin.com/in/vcamposin/)

victor.campos13@gmail.com

Project Link: [https://github.com/vcampos13/crud-api-back](https://github.com/vcampos13/crud-api-back)

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/vcampos13/crud-api-back
[contributors-url]: https://github.com/vcampos13/crud-api-back/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/vcampos13/crud-api-back
[forks-url]: https://img.shields.io/github/forks/vcampos13/crud-api-back
[stars-shield]: https://img.shields.io/github/stars/vcampos13/crud-api-back
[stars-url]: https://github.com/vcampos13/crud-api-back/stargazers
[issues-shield]: https://img.shields.io/github/issues/vcampos13/crud-api-back
[issues-url]: https://github.com/vcampos13/crud-api-back/issues
[license-shield]: https://img.shields.io/github/license/vcampos13/crud-api-back
[license-url]: https://github.com/vcampos13/crud-api-back/master/LICENSE.txt