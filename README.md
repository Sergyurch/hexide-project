<h1>How to deploy the project.</h1>
<p>You need the Docker to be installed on your PC to deploy the project</p>
<ol>
  <li>Clone the project</li>
  <li>Enter project folder</li>
  <li>In the terminal run command "docker-compose up -d"</li>
  <li>Run command "docker exec -it php-container sh"</li>
  <li>In the shell run command "php atisan migrate --seed"</li>
  <li>In the shell run command "exit"</li>
</ol>
