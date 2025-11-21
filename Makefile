.PHONY: help mariadb-toggle mariadb-status start serve npm dev

help: ## Print help
	@awk 'BEGIN {FS = ":.*##"; printf "\nUsage:\n  make \033[36m<target>\033[0m\n\nTargets:\n"} /^[a-zA-Z_-]+:.*?##/ { printf "  \033[36m%-10s\033[0m %s\n", $$1, $$2 }' $(MAKEFILE_LIST)

mariadb-toggle: ## Start mariadb if stopped, stop if running
	@if systemctl is-active --quiet mariadb.service; then \
		echo "MariaDB is running, stopping it..."; \
		systemctl stop mariadb.service; \
	else \
		echo "MariaDB is not running, starting it..."; \
		systemctl start mariadb.service; \
	fi

mariadb-status: ## Display status of mariadb
	@systemctl status mariadb.service

serve: ## Run Laravel dev server
	php artisan serve

npm: ## Run Vite dev server
	npm run dev

dev:  ## Run dev environment
	make -j 2 serve npm

clear-cache: ## Clear Laravel cache, routes, config, and views
	php artisan cache:clear
	php artisan route:clear
	php artisan config:clear
	php artisan view:clear

make: ## Run php artisan make:<TYPE> [NAME] [flags]
	@if [ -z "$(word 2,$(MAKECMDGOALS))" ]; then \
		echo "❌ Usage: make laravel-make <TYPE> [NAME] [flags]"; \
		exit 1; \
	fi; \
	TYPE=$(word 2,$(MAKECMDGOALS)); \
	NAME=$(word 3,$(MAKECMDGOALS)); \
	FLAGS=$(wordlist 4,99,$(MAKECMDGOALS)); \
	echo "🚀 Running: php artisan make:$$TYPE $$NAME $$FLAGS"; \
	php artisan make:$$TYPE $$NAME $$FLAGS

migrate: ## Run php artisan migrate[:option] [flags]
	@OPTION=$(word 2,$(MAKECMDGOALS)); \
	FLAGS=$(ARGS); \
	if [ -z "$$OPTION" ]; then \
		echo "🚀 Running: php artisan migrate $$FLAGS"; \
		php artisan migrate $$ARGS; \
	else \
		echo "🚀 Running: php artisan migrate:$$OPTION $$ARGS"; \
		php artisan migrate:$$OPTION $$ARGS; \
	fi
%:
	@:
