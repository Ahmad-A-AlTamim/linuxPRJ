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
        
        stage('Build Docker Images') {
            steps {
                script {
                    echo 'Building Docker images...'
                    sh '''
                    docker-compose -f ${DOCKER_COMPOSE_FILE} build
                    '''
                }
            }
        }
        
        stage('Deploy Containers') {
            steps {
                script {
                    echo 'Deploying containers...'
                    sh '''
                    docker compose up
                    '''
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
