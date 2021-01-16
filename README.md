# yii2-review
a module for getting reviews from critics

# INSTALL
Packagist link: https://packagist.org/packages/ozgursulum/yii2-review

composer require ozgursulum/yii2-review

# POST-INSTALL STEPS
in the config/main.php file of your app folder do the following configuration in the picture.

![Ekran Alıntısı](https://user-images.githubusercontent.com/41192900/104772842-294b4e00-5785-11eb-8729-1cacfaa41e8b.PNG)

# HOW TO USE

1- execute migrations in the migrations folder.

2- use "review/default/critics" root path for to open critic entry page. After the entry remember the "critic_id" for review entries.


![addcritic2](https://user-images.githubusercontent.com/41192900/104773968-eb4f2980-5786-11eb-9ce9-f492176e5dd4.PNG)


3- use "review/default/reviews" root path for to open review entry page. Use your "critic_id" which you get from second step.


![review2](https://user-images.githubusercontent.com/41192900/104774164-4123d180-5787-11eb-8d45-21259ed01921.PNG)

4- If your critic does not exists 

![addreview1](https://user-images.githubusercontent.com/41192900/104774429-b8f1fc00-5787-11eb-855b-bf5ee1780ccf.PNG)



# IN THE DATABASE

![database3](https://user-images.githubusercontent.com/41192900/104774304-834d1300-5787-11eb-95d3-a71afb243eaf.PNG)

-critic table

![database1](https://user-images.githubusercontent.com/41192900/104774250-6284bd80-5787-11eb-9811-e6253523a75a.PNG)

-review table

![database2](https://user-images.githubusercontent.com/41192900/104774285-78927e00-5787-11eb-9edf-e3fd2923f95a.PNG)




