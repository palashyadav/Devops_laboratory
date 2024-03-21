tests:
	@echo "Running PHP unit tests (placeholder)"
	@echo "No tests yet for php_service"

nginx-compose:
	docker run --name devops-php-nginx \
	  -v $(CURDIR)/php_service:/var/www/html \
	  -p 8080:80 \
	  -d nginx:alpine
