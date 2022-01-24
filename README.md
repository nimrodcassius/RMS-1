<div id="top"></div>
<!--
*** Thanks for checking out the Best-README-Template. If you have a suggestion
*** that would make this better, please fork the repo and create a pull request
*** or simply open an issue with the tag "enhancement".
*** Don't forget to give the project a star!
*** Thanks again! Now go create something AMAZING! :D
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
[![MIT License][license-shield]][license-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
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
    <li><a href="#usage">Usage</a></li>
    <li><a href="#roadmap">Roadmap</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgments">Acknowledgments</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project


![screenshot1](https://user-images.githubusercontent.com/50199693/150371055-205d8659-4cc5-4460-a63f-5875c0678c49.png)



This project entails achieving interaction between Property Managers/Landlords and Tenants on a property management platform. It has a website, property managers portal and a residents application. It also seeks to achieve getting tenant lease renewals through good reviews of apartment complex thus expanding property value and maintaining rental income.

Having a vibrant community means having connectivity among your residents. Nothing will make people renew a lease like feeling part of a community. So how do we achieve that? What tools can we use to help us get there? How might a sense of engagement change in the future, and how can we adapt and keep up?

Can be achieved through:
* Turning mere buildings into communities. That’s done through micro-interactions and residential engagement. Isolation can be devastating
* Research and data can help with lease renewal. Studies show that if residents know at least two people within the community, they’re much more likely to renew their lease.
* Apps should integrate with other technologies. It’s important to figure out what your residents are happy about experiencing


<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [Laravel](https://laravel.com)
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Set up project 
1.  Clone the repo
   ```sh
   git clone https://github.com/FrankArisah/RMS.git
   ```
   
2. cd into your project

3.  Install Composer Dependencies
 ```sh
   composer install
   ```
4. Install NPM 
 ```sh
   npm install
   ```

5. Create a copy of .env file
    ```sh
   php artisan key:generate
   ```
6. Create an empty database for our application

7.  In the .env file, add database information to allow Laravel to connect to the database

8.  Migrate the database
 ```sh
   php artisan migrate
   ```
9. Seed the database
 ```sh
   php artisan db:seed
   ```


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#top">back to top</a>)</p>




<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]:(https://github.com/FrankArisah/RMS/public/assets1/images/screenshot1.png?raw=true)
