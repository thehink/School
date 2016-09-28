SELECT * from country WHERE Population > 2000000

SELECT Name, GNP FROM country WHERE Population > 2000000

SELECT Name, Population FROM country WHERE Region = 'Middle East'

SELECT Name, Population FROM country WHERE Name IN ('France', 'Germany', 'Italy')

SELECT Name FROM country WHERE Name LIKE '%United%'

SELECT COUNT(Name) FROM country WHERE Name LIKE '%republic%'

SELECT Name, ROUND(Population/SurfaceArea) AS Density FROM country WHERE Population > 0 ORDER BY DESC

SELECT Region, SUM(Population) AS TotalPopulation FROM country GROUP BY Region ORDER BY TotalPopulation DESC

SELECT Name, IndepYear FROM country WHERE IndepYear IS NOT NULL ORDER BY IndepYear ASC LIMIT 1

SELECT Name, IndepYear FROM country WHERE IndepYear IS NOT NULL ORDER BY IndepYear DESC LIMIT 1

SELECT Continent, ROUND(AVG(SurfaceArea)) as AvarageArea FROM country WHERE IndepYear > 1974 GROUP BY Continent ORDER BY AvarageArea DESC

SELECT country.Name AS CountryName, city.Name AS CityName, city.Population AS CityPopulation FROM country INNER JOIN city ON country.Capital = city.ID WHERE country.population > 20000000
