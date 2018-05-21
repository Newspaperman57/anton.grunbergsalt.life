git pull
echo "$1" >> grunbergsalt.csv
git add grunbergsalt.csv
git commit -m "Added salt: '$1'"
git push