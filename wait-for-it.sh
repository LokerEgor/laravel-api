set -e

host="$1"
shift
cmd="$@"

until nc -z "$host" 3306; do
  echo "Ждём MySQL..."
  sleep 1
done

exec $cmd