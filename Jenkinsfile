pipeline {
    agent any
    
    environment {
        REPO_URL = 'https://github.com/Ahmad-A-AlTamim/linuxPRJ'
        DOCKER_COMPOSE_FILE = 'docker-compose.yml'
    }
    
    stages {
        stage('Clone Repository') {
            steps {
                script {
                    echo 'Cloning repository...'
                    git branch: 'main', url: "${REPO_URL}"
                }
            }
        }
        

    }
    
    post {
        success {
            echo 'Pipeline executed successfully!'
        }
        failure {
            echo 'Pipeline failed. Please check the logs.'
        }
    }
}
