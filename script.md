Hey guys, welcome to the video

aj ki iss video me hum ek full fledged web appication host karenge, jiska backend me laravel framework me hai jo ki php ka framework hai aur frontend me javascript framework react ka use kiya hai...

abhi ye pura setup localhost me run ho raha hai, laravel ki application ke liye yaha par apache web server me virtual host kiya hai aur application iss domain http://www.test-api.com par chal rahi hai...

aur frontend me react ki jo app hai woh npm run ke through chal rahi hai, same envrironment ko hum aws me host karenge simplified way me...to chaliye start karte hai...


--------------------------------------------------------

same scenario ko diagram se samajte hai to backend ki backend ki application hai woh database se connected hai to uske liye hume chaiye 
mysql RDS Database

Next step me hum host karenge backend application using elastic beanstalk

Aur end me hum frontend application jo ki laravel ke through api call karti hai usko hum host karenge S3 bucket par...

To sabse pehle create kar lete hai RDS database aur phir localhost me se mysql database export kar ke RDS cluster jo create hoga us par import karenge...
