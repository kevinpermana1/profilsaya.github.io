<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kevin Permana Personal Website</title>
</head>
<link rel="stylesheet" href="style.css">

<body>

<nav>
 
 <ul>

      <li><a href="#">Beranda</a></li>

      <li><a href="about.php">Profil</a>

         

      </li>

      <li class="dropdown"><a href="#">Materi</a>

        <ul>

          <li><a href="penulisan.docx">Penulisan css</a></li>

          <li><a href="#">PHP</a></li>

          <li><a href="#">Jquery</a></li>

          <li><a href="#">HTML</a>
              <ul>
                  <li><a href="#">Dasar HTML</a></li>

                  <li><a href="#">Tag HTML</a></li>

                  </ul>
             </li>
         </ul>

      </li>

      <li><a href="#">Kontak</a></li>
       
  </ul>

</nav>

    

    <hr />

    <header style="text-align: center;">
        <img src="img/kevin.png" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Kevin Permana</h1>
        <p>(Web Developer muda)</p>
    </header>

    <hr />

    <article style="text-align: center;">
        <h2>Overview</h2>
        <p>
            Hi, saya adalah Web Developer muda yang berdomisili di Tangerang Selatan.
            Saat ini sedang belajar HTML untuk membuat profil pribadi
        </p>
    </article>

    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Pengalaman</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <ul>
                            <li>HTML (Expert)</li>
                            <li>CSS (Beginner)</li>
                            <li>Javascript (Beginner)</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>Freelancer di Internet</li>
                            <li>Leader Local Linux Community</li>
                            <li>Leader Local Linux Community</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
            
        </table>
    </div>

    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2024 Kevin Permana.</p>
    </footer>
</body>
</html>