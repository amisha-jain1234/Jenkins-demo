pipeline {
    agent any

    stages {
        stage('Fetch Code') {
            steps {
                git 'https://github.com/I-AMANSINHA/Jenkins-demo.git'
            }
        }

        stage('Build') {
            steps {
                sh 'javac -classpath /home/ec2-user/apache-tomcat-8.5.88/lib/servlet-api.jar -d /home/ec2-user/CalculaterApp/web/WEB-INF/classes /path/to/your/source/code/CalculatorServlet.java'
                sh 'jar -cvf /home/ec2-user/CalculatorApp.war -C /home/ec2-user/CalculaterApp/web .' // Replace with your actual build command and path
            }
        }

        stage('Deploy') {
            steps {
                sh 'cp /home/ec2-user/CalculatorApp.war /home/ec2-user/apache-tomcat-8.5.88/webapps' // Replace with the appropriate Tomcat deployment command
            }
        }
    }
}
