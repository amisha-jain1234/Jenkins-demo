pipeline {
    agent any
   
    stages {
        stage('Fetch Code') {
            steps {
                print(env.WORKSPACE)
                checkout([$class: 'GitSCM', 
                          branches: [[name: '*/main']],
                          doGenerateSubmoduleConfigurations: false,
                          extensions: [],
                          submoduleCfg: [],
                          userRemoteConfigs: [[url: 'https://github.com/I-AMANSINHA/Jenkins-demo.git']]
                        ])
            }
        }

        stage('Build') {
            steps {
                dir('/root/.jenkins/jobs/Test2/workspace/') {
                    sh 'javac -classpath /home/ec2-user/apache-tomcat-8.5.88/lib/servlet-api.jar -d CalculatorApp/WEB-INF/classes CalculatorApp/src/com/example/servlets/CalculatorServlet.java'
                }
            }
        }
        
        stage('Deploy') {
            steps {
                // sh 'rm /home/ec2-user/apache-tomcat-8.5.88/webapps/CalculatorApp.war'
                sh 'jar -cvf /home/ec2-user/apache-tomcat-8.5.88/webapps/CalculatorApp.war -C /root/.jenkins/jobs/Test2/workspace/CalculatorApp/web .' // Replace with your actual build command and path
                // sh 'bash /home/ec2-user/apache-tomcat-8.5.88/bin/shutdown.sh'
                sh 'bash /home/ec2-user/apache-tomcat-8.5.88/bin/startup.sh'
            }
        }
    }
}
