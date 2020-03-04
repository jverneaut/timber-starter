FROM debian:stable-slim

RUN apt-get update && \
  apt-get install -y openssh-client && \
  apt-get install -y rsync && \
  rm -Rf /var/lib/apt/lists/*

COPY entrypoint.sh /entrypoint.sh

ENTRYPOINT [ "/entrypoint.sh" ]
