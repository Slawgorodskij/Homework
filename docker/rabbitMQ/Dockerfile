FROM rabbitmq:3.8-management-alpine

ENV RABBITMQ_USER master
ENV RABBITMQ_PASSWORD password
ENV RABBITMQ_PID_FILE /var/lib/rabbitmq/mnesia/rabbitmq

ADD init.sh /init.sh
RUN ["chmod", "+x", "/init.sh"]
ENTRYPOINT ["sh", "/init.sh"]
EXPOSE 15672

# Define default command
CMD ["/init.sh"]