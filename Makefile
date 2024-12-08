app_name=reporting
build_dir=build

.phony: docker

docker: build
	docker kill nextcloud || true
	docker run -it --rm -d --name nextcloud \
		--env NEXTCLOUD_ADMIN_USER=admin \
		--env NEXTCLOUD_ADMIN_PASSWORD=adminpassword	\
		--env SQLITE_DATABASE=nextcloud.db \
		-p 8080:80 nextcloud:latest



.PHONY: build

build:
	cd $(app_name) && npm run build
	mkdir -p $(build_dir)
	tar pczf $(build_dir)/$(app_name).tar.gz $(app_name)/
